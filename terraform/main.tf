terraform {
  required_providers {
    azurerm = {
      source  = "hashicorp/azurerm"
      version = "3.33.0"
    }
  }
}

provider "azurerm" {
  subscription_id = "1af1ce11-728b-48af-b83f-916d9be7a83d"
  client_id       = "f3904f4f-c079-45e8-92b6-efcdcbc28178"
  client_secret   = "ZL68Q~owFP9lfHgF-IlApI0sAxtz8Q9eXnhACcgB"
  tenant_id       = "808ef6d5-5728-459b-800c-968535a011a1"
features {}

}
