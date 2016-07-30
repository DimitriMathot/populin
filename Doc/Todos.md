#TODOs

##General

* Split to many repos  

##Data

* Consolidate french data 
	* geographical data 
		* old and new versions of "cantons" and "regions"
		* Find a way to simplify some heavy administrative areas (store a simplified version for display and a full version for spatial operations in DB ?)
	* mandates
		* should reflect a new boolean attribute : obtained from an election or not (i.e. french ministers are nominated by the president)
	* elects to mandates association
		* should reflect if elect is in majority
		
##Backend API

* Expose translations  
* Use API Versioning on Entities and Controllers
* All Forms Types  
* All translations  
* Api doc improvement

##Databases

###MySQL

* Create dump to work in local environment
* Use Fixtures and Faker for sensitive data
