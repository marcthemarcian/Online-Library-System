$('.remove').click(function() {
  $option = prompt("Do you really want to remove this book? (Y/N)");

  if ($option == 'y' || $option == 'Y') {
    $(location).attr('href','removeBook?B_ID='+this.id);
  } else if ($option =='n' || $option == 'N') {
    //do nothing
  } else {
    alert("Your answer is invalid, scum.");
  }
});