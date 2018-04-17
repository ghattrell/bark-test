$(document).ready(function(){
    var base_url = 'http://127.0.0.1:8000/';

    var loadEntries = function () {
      $.ajax({
           url: base_url + 'api/entries',
           error: function(error) {
              $('#info').html('<p>An error has occurred</p>');
           },
           success: function(data) {
             $.each(data.payload, function (index, entry) {
               console.log(entry);
               var $title   = $('<h3>').text(entry.first_name + ' ' + entry.last_name);
               var $message = $('<p>').text(entry.message);
               $('.entries')
                  .append($title)
                  .append($message);
             })
           },
           type: 'GET'
        });
    }

    loadEntries();
});
