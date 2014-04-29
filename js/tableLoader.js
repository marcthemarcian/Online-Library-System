$('#content-all').click(function(){
  $.ajax({
    url: '../library/',
    data: { genre: '*' },
    type: 'POST',
    success: function(data) {
      createTable(data, '#tab-content1');
      loadEventHandler();
    }
  });
});

$('.content-specific').click(function(){
  var genre = $(this).attr('id');
  var section = '#' + $(this).attr('value');
  console.log(genre);
  $.ajax({
    url: '../library/',
    data: { genre: genre },
    type: 'POST',
    success: function(data) {
      createTable(data, section);     
      loadEventHandler();
    }
  });
});

createTable = function(data, id) {
  $(id).empty();

  if (data.length == 2) {
    $(id).append('<div style="width:100%; text-align:center; margin: 0 auto;"><h2>No records found.</h2></div>');
    return;
  }

  $(id).append('<table></table>');
  $(id +' table').append('<thead>\
    <th><strong>Title</strong></th> \
    <th><strong>Author</strong></th> \
    <th><strong>Date Published</strong></th> \
    <th><strong>Publisher</strong></th> \
    <th><strong>Copies Available</strong></th> \
    <th><strong>Total Copies</strong></th> \
    <th><strong>Genre</strong></th> \
    </thead>');

  data = JSON.parse(data);
  for (var i = 0; i < data.length; i++) {
    $(id + ' table').append('<tr id="'+data[i]['B_ID']+'"> \
      <td>'+data[i]['title']+'</td> \
      <td>'+data[i]['author']+'</td> \
      <td>'+data[i]['date_published']+'</td> \
      <td>'+data[i]['publisher']+'</td> \
      <td>'+data[i]['copies_available']+'</td> \
      <td>'+data[i]['total_copies']+'</td> \
      <td>'+data[i]['genre']+'</td> \
      </tr> \
      ');
  } 
}

loadEventHandler = function() {
  $('table tbody tr').click(function(){    
    $(location).attr('href','book?B_ID='+this.id);
  });
}

window.onload=function(){
  document.getElementById('content-all').click();
}

