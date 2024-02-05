function booking(){

location.href="bookings.php"

}

// <!-- ... your existing PHP/HTML content ... -->

{/* <button class="bookNowbtn" data-room-id="1" data-room-image="./project-assests/Rooms/Room1.webp" data-room-price="400" data-room-heading="Wodden Lodgings"><b>Book Now</b></button> */}

// <!-- ... more instances of the same template ... -->


const bookNowButtons = document.querySelectorAll('.bookNowbtn');


bookNowButtons.forEach(button => {
  button.addEventListener('click', function() {
    
    const roomId = this.getAttribute('data-room-id');
    const roomImage = this.getAttribute('data-room-image');
    const roomPrice = this.getAttribute('data-room-price');
    const roomHeading = this.getAttribute('data-room-heading');

    window.location.href = `form.php?roomId=${roomId}&roomImage=${roomImage}&roomPrice=${roomPrice}&roomHeading=${roomHeading}`;
  });

});





var roomid= document.getElementById("rmid").value

console.log(roomid)

function changePage(){
  location.href = "Rooms.php";
}




// echo "ID: " . $row["id"] . "<br>";
// echo "Room ID: " . $row["room_id"] . "<br>";
// echo "Room Name: " . $row["room_name"] . "<br>";
// echo '<img src="' . $row["image"] . '" alt="Room Image"><br>'; // Displaying the image
// echo "Room Price: " . $row["price"] . "<br>";
