pub mod grpc;

use tonic::transport::Server;
use crate::grpc::{pb::user_service_server::UserServiceServer, OtherUserService};

#[tokio::main]
async fn main() -> Result<(), Box<dyn std::error::Error>> {
    let addr = "0.0.0.0:3000".parse().unwrap();

    let user = OtherUserService::default();

    println!("UserService listening on {}", addr);

    Server::builder()
        // GrpcWeb is over http1 so we must enable it.
        .add_service(UserServiceServer::new(user))
        .serve(addr)
        .await?;

    Ok(())
}