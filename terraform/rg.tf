resource "azurerm_resource_group" "rgtftest" {
  name     = "rgtfdevops"
  location = "east us"
  tags = {
        envirennement = "dev"
  }
}
