<h1 class="mt-5">::::Forms</h1>
<hr/>
<a href="https://www.w3schools.com/bootstrap4/bootstrap_forms.asp" target="_blank"/>w3schools</a>
<div class="container">
  <h2>Stacked form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<div class="container">
  <h2>Inline form</h2>
  <p>Make the viewport larger than 576px wide to see that all of the form elements are inline and left-aligned. On small screens, the form groups will stack horizontally.</p>
  <form class="form-inline" action="/action_page.php">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<div class="container">
  <h2>Inline form</h2>
  <p>Make the viewport larger than 576px wide to see that all of the form elements are inline and left-aligned. On small screens, the form groups will stack horizontally.</p>
  <form class="form-inline" role="form">
    <label for="email2" class="mb-2 mr-sm-2">Email:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" placeholder="Enter email">
    <label for="pwd2" class="mb-2 mr-sm-2">Password:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="Enter password">
    <div class="form-check mb-2 mr-sm-2">
      <label class="form-check-label">
        <input class="form-check-input "type="checkbox"> Remember me
      </label>
    </div>    
  <button type="button" class="btn btn-primary mb-2">Submit</button>
  </form>
</div>
