<h1 class="mt-5">::::Input Groups</h1>
<hr/>
<a href="https://www.w3schools.com/bootstrap4/bootstrap_forms_input_group.asp" target="_blank"/>w3schools</a>


<div class="container mt-3">
  <h3>Input Groups</h3>
  <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front (.input-group-prepend) or behind (.input-group-append) the input field as a "help text".</p>
  <p>Use the .input-group-text class to style the specified help text.</p>
  
  <form action="/action_page.php">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">@</span>
      </div>
      <input type="text" class="form-control" placeholder="Username" id="usr" name="username">
    </div>

    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Your Email" id="mail" name="email">
      <div class="input-group-append">
        <span class="input-group-text">@example.com</span>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<div class="container mt-3">
  <h1>Input Group Size</h1>
  <p>Use the .input-group-sm class for small input groups and .input-group-lg for large inputs groups:</p>
  <form>
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">Small</span>
      </div>
      <input type="text" class="form-control">
    </div>
  </form>
  <form>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Default</span>
      </div>
      <input type="text" class="form-control">
    </div>
  </form>
  <form>
    <div class="input-group mb-3 input-group-lg">
      <div class="input-group-prepend">
        <span class="input-group-text">Large</span>
      </div>
      <input type="text" class="form-control">
    </div>
  </form>
</div>


<div class="container mt-3">
  <h3>Multiple Inputs and Addons</h3>
  
  <form>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Person</span>
      </div>
      <input type="text" class="form-control" placeholder="First Name">
      <input type="text" class="form-control" placeholder="Last Name">
    </div>  
  </form>
  
  <form>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">One</span>
        <span class="input-group-text">Two</span>
        <span class="input-group-text">Three</span>
      </div>
      <input type="text" class="form-control">
    </div>
  </form>
</div>


<div class="container mt-3">
  <h3>Input Group with Checkboxes and Radios</h3>
  <p>You can also use checkboxes or radio buttons instead of text:</p>
  <form>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <input type="checkbox"> 
        </div>
      </div>
      <input type="text" class="form-control" placeholder="Some text">
    </div>
  </form>
  
  <form>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <input type="radio"> 
        </div>
      </div>
      <input type="text" class="form-control" placeholder="Some text">
    </div>
  </form>
</div>
 
<div class="container mt-3">
  <h1>Input Group Buttons</h1>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-outline-secondary" type="button">Basic Button</button>  
    </div>
    <input type="text" class="form-control" placeholder="Some text">
  </div>

  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-append">
      <button class="btn btn-success" type="submit">Go</button>  
     </div>
  </div>

  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Something clever..">
    <div class="input-group-append">
      <button class="btn btn-primary" type="button">OK</button>  
      <button class="btn btn-danger" type="button">Cancel</button>  
     </div>
  </div>
</div>


<div class="container mt-3">
  <h3>Input Groups with Dropdown Button</h3>
  <p>Add a dropdown button in the input group. Note that you don't need the .dropdown wrapper, as you normally would.</p>
  <form>
    <div class="input-group mt-3 mb-3">
      <div class="input-group-prepend">
        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
          Dropdown button
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="Username">
    </div>
  </form>
</div>


<div class="container mt-3">
  <h2>Input Group Labels</h2>
  <p>Put labels outside of the input group, and remember that the value of the for attribute should match the id of the input.</p>
  <p>Click on the label and it will bring focus to the input:</p>
  <form>
    <label for="demo">Write your email here:</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Email" id="demo" name="email">
      <div class="input-group-append">
        <span class="input-group-text">@example.com</span>
      </div>
    </div>
  </form>
</div>
