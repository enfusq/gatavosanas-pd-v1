<form action="/receive_contact_data.php" method="post">
        <label for="name">Enter name: </label> <br>
        <input type="text" name="name" id="name"> <br> <br>

        <label for="1">1</label>
        <input type="radio" name="number" id="1" value="1">

        <label for="2">2</label>
        <input type="radio" name="number" id="2" value="2">

        <label for="3">3</label>
        <input type="radio" name="number" id="3" value="3"> <br> <br>

        <select name="select" id="select">
            <option value="">--Choose an option--</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="guinea pig">Guinea Pig</option>
        </select> <br> <br>

        <button type="submit">Submit</button>

    </form>