pub mod pb {
    tonic::include_proto!("sample");
}

use std::pin::Pin;
use tokio_stream::{wrappers::ReceiverStream, Stream};
use tonic::{Response, Status, Result};
use tokio::sync::mpsc;

use crate::grpc::pb::User;
use crate::grpc::pb::UpdateUserRequest;
use crate::grpc::pb::ListUsersRequest;

pub(crate) type ListUsersStream = Pin<Box<dyn Stream<Item = Result<User, Status>> + Send>>;

#[derive(Default)]
pub struct OtherUserService;

#[tonic::async_trait]
impl pb::user_service_server::UserService for OtherUserService {
    type ListUsersStream = crate::grpc::ListUsersStream;
    async fn list_users(&self, request: tonic::Request<ListUsersRequest>) -> Result<Response<Self::ListUsersStream>> {
        let (tx, rx) = mpsc::channel(128);
        let output_stream = ReceiverStream::new(rx);
        Ok(Response::new(
            Box::pin(output_stream) as Self::ListUsersStream
        ))
    }
    async fn update_user(&self, request: tonic::Request<UpdateUserRequest>) -> Result<Response<User>> {
        Ok(Response::new(
            User {
                id: 2,
                role: 1,
                date: String::from("none")
            }
        ))
    }
}