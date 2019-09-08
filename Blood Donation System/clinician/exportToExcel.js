function exportAsExcel()
{
	$(document).ready(function(){
	 
		$("#example").table2excel({
		  exclude: ".excludeThisClass",
		  name: "Worksheet Name",
		  filename: "Malaria", //do not include extension
		  fileext: ".csv", // MUST use .xls extension, only this will work
	   });
	   
	   
	});
	
}