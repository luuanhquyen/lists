var client = new $.RestClient('/api/');
client.lefts.read().done(function (data){
    alert('I have data: ' + data);
  });
