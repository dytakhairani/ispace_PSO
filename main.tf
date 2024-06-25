provider "aws" {
  region = "ap-southeast-2" 
}

resource "aws_instance" "ispace-app" {
  ami           = "ami-080660c9757080771"
  instance_type = "t2.micro"
  tags = {
    Name = "ispace-app"
  }
}
