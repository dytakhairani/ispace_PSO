terraform {
  backend "gcs" {
    bucket = "ispace_pso"
    prefix = "terraform/state"
  }
}
