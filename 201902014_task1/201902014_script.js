// Welcome Message
document.write("<h3>Welcome to Seoul's Interactive Experience!</h3>");
alert("Welcome to Seoul!");

// Variables
var visitorName = prompt("What is your name?");
const cityName = "Seoul";
alert("Hello, " + visitorName + "!");

// Using innerHTML
document.getElementById("seoul").innerHTML = `${cityName} - A city of wonders!`;

// Arithmetic, Comparison, Logical Operators
let a = 5;
let b = 10;
let sum = a + b;
console.log("Sum: ", sum);
if (a < b && sum > 10) {
  console.log("Arithmetic and comparison working correctly.");
}

// Array and Object
const attractions = ["Gyeongbokgung Palace", "Bukchon Hanok Village", "Namsan Tower"];
const cityDetails = {
  name: "Seoul",
  population: 10000000,
  country: "South Korea",
};

console.log(cityDetails.name + " Attractions: " + attractions);

// Map and Set
const feedbackSet = new Set(["Amazing!", "Beautiful!", "Spectacular!"]);
const attractionMap = new Map([
  ["Gyeongbokgung", "Historic Palace"],
  ["Bukchon", "Cultural Village"],
  ["Namsan Tower", "Observation Tower"],
]);

console.log("Feedback: ", Array.from(feedbackSet));
console.log("Attractions: ", Array.from(attractionMap.entries()));

// Functions
function showAttractions() {
  document.getElementById("attraction").innerHTML = attractions.join(", ");
}
function validateForm() {
  try {
    let name = document.getElementById("name").value;
    if (!name) throw "Name is required!";
    alert("Form submitted successfully!");
  } catch (error) {
    console.error(error);
  }
}

// Event Handling
document.getElementById("footer").onclick = function () {
  alert("Back to Top!");
};
document.querySelector("input[type='submit']").onclick = validateForm;