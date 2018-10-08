<h1 class="mt-5">::::Inputs</h1>
<hr/>
<a href="https://www.w3schools.com/bootstrap4/bootstrap_forms_inputs.asp" target="_blank"/>w3schools</a>
<div class="container">
  <h2>Form control: input</h2>
  <p>The form below contains two input elements; one of type text and one of type password:</p>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr4" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd4" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<div class="container">
  <h2>Form control: textarea</h2>
  <p>The form below contains a textarea for comments:</p>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<div class="container">
  <h2>Form control: checkbox</h2>
  <p>The form below contains three checkboxes. The first option is checked by default, and the last option is disabled:</p>
  <form action="/action_page.php">
    <div class="form-check">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Option 1
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">Option 2
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" disabled>Option 3
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<div class="container">
  <h2>Form control: inline checkbox</h2>
  <p>The form below contains three inline checkboxes:</p>
  <form action="/action_page.php">
    <div class="form-check-inline">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1a" name="vehicle1" value="something" checked>Option 1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2a" name="vehicle2" value="something">Option 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" disabled>Option 3
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<div class="container">
  <h2>Form control: radio buttons</h2>
  <p>The form below contains three radio buttons. The first option is checked by default, and the last option is disabled:</p>
  <form action="/action_page.php">
    <div class="form-check">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Option 1
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Option 2
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" disabled>Option 3
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<div class="container">
  <h2>Form control: inline radio buttons</h2>
  <p>The form below contains three inline radio buttons. The first option is checked by default, and the last option is disabled:</p>
  <form action="/action_page.php">
    <div class="form-check-inline">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1a" name="optradio" value="option1" checked>Option 1
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2a" name="optradio" value="option2">Option 2
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" disabled>Option 3
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<div class="container">
  <h2>Form control: select</h2>
  <p>The form below contains two dropdown menus (select lists):</p>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1" name="sellist1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <br>
      <label for="sel2">Mutiple select list (hold shift to select more than one):</label>
      <select multiple class="form-control" id="sel2" name="sellist2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<div class="container">
  <h2>Form Control Sizing</h2>
  <p>Change the size of the form control with .form-control-sm or .form-control-lg:</p>
  <form action="/action_page.php">
    <div class="form-group">
      <input type="text" class="form-control form-control-sm" placeholder="Small form control" name="text1">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Default form control" name="text2">
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-lg" placeholder="Large form control" name="text3">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<div class="container">
  <h2>Form Control Plain Text</h2>
  <p>Use the .form-control-plaintext if you want to style the input field as plain text:</p>
  <form action="/action_page.php">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Default form control" name="text1">
    </div>
    <div class="form-group">
      <input type="text" class="form-control-plaintext" placeholder="Form control with plain text" name="text2">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<div class="container">
  <h2>Form Control Range and File</h2>
  <p>Add the .form-control-range class to input type"range" or .form-control-file to input type"file" to style a range control or a file field with full-width:</p>
  <form action="/action_page.php">
    <div class="form-group">
      <input type="range" class="form-control-range" name="range">
    </div>
    <div class="form-group">
      <input type="file" class="form-control-file border" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>