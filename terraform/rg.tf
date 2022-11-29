resource "azurerm_resource_group" "rgtftest" {
  name     = "testtf"
  location = "east us"
  tags = {
        envirennement = "dev"
  }
}
