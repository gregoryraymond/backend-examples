fn main()
{
    tonic_build::compile_protos("../protos/sample.proto").unwrap();
}