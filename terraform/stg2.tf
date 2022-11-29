resource "azurerm_storage_account" "staccvtf" {
  name                     = "sttfdevopssalah2"
  resource_group_name      = azurerm_resource_group.rgtftest.name
  location                 = azurerm_resource_group.rgtftest.location
  account_tier             = "Standard"
  account_replication_type = "GRS"

  tags = {
    environment = "staging"
  }
}
