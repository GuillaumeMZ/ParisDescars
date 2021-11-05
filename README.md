# Paris Descars
Uni project - Car renting web application written in PHP8 with Symfony 5.
---
The objective of this project is to create a working car renting web application in PHP, with the framework [Symfony](https://symfony.com/) as an option. Of course, since a project made with Symfony results in a better mark, I decided to use it. 

## How it is designed?

The users which can use this app are divided in three categories:
* **Visitors** (unconnected users) can see all the cars which are available for rent. For each car, a small description, its characteristics and a picture of it should be provided.
* **Clients** must first connect and can disconnect from the website. They can see the cars they rented, and they can rent new cars (as long as they are available) with a basket-like system.
* **Renters**, like clients, must first connect and can disconnect from the website. They can see their vehicles (rented or not)

## Database organisation

Client(**IdClient**, Username, Email, Password, **#IdCorp**) `Password` is the hash (SHA-256) of the real password.  
Renter(**IdRenter**, Username, Email, Password, **#IdCorp**) `Password` is the hash (SHA-256) of the real password.  
Corporation(**IdCorp**, CorpName, CorpAddress)  
Vehicle(**IdVehicle**, Type, Amount, Details, Photo, LocationState) `Details` corresponds to the characteristics of the vehicle. It is a JSON string.  
Bill(**IdBill**, **#IdClient**, **#IdRenter**, **#IdVehicle**, BeginDate, EndDate, Price, PaymentStatus)
