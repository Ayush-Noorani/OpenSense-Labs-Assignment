<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Open Sense Labs</title>
</head>
<body>
  <script src="JsScript.js"></script>
    <header>
        <div id="head">
            <h2>Apply for a Position</h2>
            <p>Please complete the form below to apply for a position with us.</p>
            <hr>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="connect.php" method="POST">
              <ul class="flex-outer">
                <li>
                  <label for="firstname">First Name</label>
                  <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
                </li>
                <li>
                  <label for="lastname">Last Name</label>
                  <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
                </li>
                <li>
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" placeholder="abc@example.com" required>
                </li>
                <li>
                  <label for="linkedin">linkedin</label>
                  <input type="text" id="linkedin" name="linkedin">
                </li>
                <li>
                  <label for="durpal">Durpal.org</label>
                  <input type="text" id="durpal" name="durpal">
                </li>
                <li>
                  <label for="position">Position applying for</label>
                  <input type="text" id="position" name="position" required>
                </li>
                <li>
                    <label for="startdate">When can you start?</label>
                    <input type="text" id="startdate" name="startdate" required>
                </li>
                <li>
                    <label for="phone">Phone</label>
                    <input type="number" id="phone" name="phone" required>
                </li>
                <li>
                    <label for="city">Current city</label>
                    <select id="city" name="city" onchange="cityCheck(this);">
                        <option value="delhi">Delhi</option>
                        <option value="other">Other</option>
                    </select>
                </li>
                <li id="cityname" style="display: none;">
                    <label for="cityname">City Name</label>
                    <input type="text" id="cityname" name="cityname">
                </li>
                <li id="relocate" style="display: none;">
                    <label for="relocate">Are you willing to relocate?</label>
                    <select id="relocate" name="relocate">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        <option value="not sure">Not Sure</option>
                    </select>
                <li>
                    <label for="lastcomp">Last comapny you worked for?</label>
                    <input type="text" id="lastcomp" name="lastcomp">
                </li>
                <li>
                    <label for="comments">Comments</label>
                    <textarea rows="6" id="comments" name="comments"></textarea>
                  </li>
                <li>
                  <button type="submit" name="submit">Submit</button>
                </li>
              </ul>
            </form>
          </div>
        </div>

    </main>
</body>
</html>