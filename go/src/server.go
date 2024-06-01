package main

import (
	"context"

	pb "backend/proto"
)

type UserService struct {
	pb.UnimplementedUserServiceServer
}

func (s *UserService) ListUsers(req *pb.ListUsersRequest, stream pb.UserService_ListUsersServer) error {
	if err := stream.Send(&pb.User{}); err != nil {
		return err
	}
	return nil
}

func (s *UserService) UpdateUser(ctx context.Context, req *pb.UpdateUserRequest) (*pb.User, error) {
	return &pb.User{}, nil
}