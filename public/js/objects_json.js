'use strict';

// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
var books = 

	[
		{
			"title": "Harry Potter and the Sorcere's Stone",
			"author": {"firstName": "J.K", "lastName":"Rowling"}
		},
		{
			"title": "Angels and Demons",
			"author": {"firstName": "Dan", "lastName":"Brown"}
		},
		{
			"title": "War and Peace",
			"author": {"firstName": "Leo", "lastName":"Tolstoi"}
		},
		{
			"title": "The Gunslinger",
			"author": {"firstName": "Stephen", "lastName":"King"}
		},
		{
			"title": "Caballo de Troya",
			"author": {"firstName": "J.J", "lastName":"Benitez"}
		}
	];

// log out the books array
console.log(books);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
books.forEach(function(elements,index,array){
    console.log("Book #" + (index+1));
    console.log("Title: " + elements.title);
    console.log("Author: " + elements.author.firstName +" "+ elements.author.lastName);
    console.log("---");
});
// end loop here