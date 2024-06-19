provider "google" {
  credentials = file(var.gcp_credentials_file)
  project     = var.project_id
  region      = var.region
}

variable "gcp_credentials_file" {}
variable "project_id" {}
variable "region" {
  default = "us-central1"
}
variable "zone" {
  default = "us-central1-a"
}

resource "google_compute_instance" "default" {
  name         = "instance-name"
  machine_type = "f1-micro"

  boot_disk {
    initialize_params {
      image = "debian-cloud/debian-9"
    }
  }

  network_interface {
    network = "default"

    access_config {
    }
  }
}
