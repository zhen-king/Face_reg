var request = require('request');
var fs = require('fs');
var options = {
  'method': 'POST',
  'url': 'https://api.luxand.cloud/subject/v2',
  'headers': {
    'token': '9caf6e357ba1472598b8c60ce16adf5a'
  },
  formData: {
    'name': '',
    'photo': {
      'value': fs.createReadStream(__dirname + "/testfaces"),
      'options': {
        'filename': 'filename',
        'contentType': null
      }
    },
    'store': '1'
  }
};
request(options, function (error, response) {
  if (error) throw new Error(error);
  console.log(response.body);
  console.log("success");
});
