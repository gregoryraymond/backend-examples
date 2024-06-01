package main

import (
	"flag"
	"fmt"
	"io"
	"log"
	"net"
	"os"
	"time"

	"google.golang.org/grpc"

	pb "backend/proto"
)

var (
	WarningLogger *log.Logger
	InfoLogger    *log.Logger
	ErrorLogger   *log.Logger
	DebugLogger   *log.Logger
)

var (
	server_listen = flag.String("server_addr", "0.0.0.0", "Server address to allow overriding interface.")
	port          = flag.Int("port", 50051, "The server port.")
)

// The server should log to a file and the console.
func setup_logger() *os.File {
	flag.Parse()
	logFile, err := os.OpenFile("go_server.log", os.O_CREATE|os.O_APPEND|os.O_RDWR, 0666)
	if err != nil {
		panic(err)
	}
	mw := io.MultiWriter(os.Stdout, logFile)
	DebugLogger = log.New(mw, "DEBUG: ", log.Ldate|log.Ltime|log.Lshortfile)
	InfoLogger = log.New(mw, "INFO: ", log.Ldate|log.Ltime|log.Lshortfile)
	WarningLogger = log.New(mw, "WARNING: ", log.Ldate|log.Ltime|log.Lshortfile)
	ErrorLogger = log.New(mw, "ERROR: ", log.Ldate|log.Ltime|log.Lshortfile)
	log.SetOutput(mw)

	return logFile
}

func start_server() {
	address := fmt.Sprintf("%s:%d", *server_listen, *port)

	for {
		lis, err := net.Listen("tcp", address)
		if err != nil {
			ErrorLogger.Fatalf("Failed to listen: %v", err)
		} else {
			InfoLogger.Printf("Listening on address: $s", address)
		}
		var opts []grpc.ServerOption

		grpcServer := grpc.NewServer(opts...)
		pb.RegisterUserServiceServer(grpcServer, &UserService{})
		if err := grpcServer.Serve(lis); err != nil {
			ErrorLogger.Printf("failed to serve: %v", err)
			time.Sleep(1 * time.Second)
			continue
		}
		break
	}
}

func main() {
	logFile := setup_logger()
	defer logFile.Close()

	InfoLogger.Println("Server starting")
	start_server()

	logFile.Sync()
}
