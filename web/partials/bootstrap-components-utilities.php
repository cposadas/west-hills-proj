<h1 class="mt-5">::::Utilies</h1>
<hr/>
<a href="https://www.w3schools.com/bootstrap4/bootstrap_utilities.aspUtiltiies" target="_blank"/>w3schools</a>

  <style>
  .border {
    display: inline-block;
    width: 70px;
    height: 70px;
    margin: 6px;
  }
  </style>
  
<div class="container">
  <h2>Borders</h2>
  <p>Use the border classes to add or remove borders from an element:</p> 
  <span class="border"></span>
  <span class="border border-0"></span>
  <span class="border border-top-0"></span>
  <span class="border border-right-0"></span>
  <span class="border border-bottom-0"></span>
  <span class="border border-left-0"></span>
</div>

 <style>
  .border {
    display: inline-block;
    width: 70px;
    height: 70px;
    margin: 6px;
  }
</style>
  

<div class="container">
  <h2>Borders</h2>
  <p>Use a contextual border color to add a color to the border:</p> 
  <span class="border border-primary"></span>
  <span class="border border-secondary"></span>
  <span class="border border-success"></span>
  <span class="border border-danger"></span>
  <span class="border border-warning"></span>
  <span class="border border-info"></span>
  <span class="border border-light"></span>
  <span class="border border-dark"></span>
  <span class="border border-white"></span>
</div>

  <style>
  .container.util span {
    display: inline-block;
    width: 70px;
    height: 70px;
    margin: 6px;
    background-color: #555;
  }
  </style>
  
 <div class="container util">
  <h2>Borders</h2>
  <p>Round the corner of an element with the rounded classes:</p> 
  <span class="rounded"></span>
  <span class="rounded-top"></span>
  <span class="rounded-right"></span>
  <span class="rounded-bottom"></span>
  <span class="rounded-left"></span>
  <span class="rounded-circle"></span>
  <span class="rounded-0"></span>
</div>


<div class="container">
  <h2>Float</h2>
  <p>Float an element to the right with the .float-right class or to the left with .float-left, and clear floats with the .clearfix class.</p> 
  <div class="clearfix">
    <span class="float-left">Float left</span>
    <span class="float-right">Float right</span>
  </div>
</div>

<div class="container">
  <h2>Responsive Floats</h2>
  <p>Float an element to the left or to the right depending on screen width, with the responsive float classes .float-*-left|right (where * is sm, md, lg or xl).</p>
  <p>Resize the browser window to see the effect.</p> 
  <div class="clearfix">
    <div class="float-sm-right">Float right on small screens or wider</div><br>
    <div class="float-md-right">Float right on medium screens or wider</div><br>
    <div class="float-lg-right">Float right on large screens or wider</div><br>
    <div class="float-xl-right">Float right on extra large screens or wider</div><br>
    <div class="float-none">Float none</div>
  </div>
</div>


<div class="container">
  <h1>Horizontal Centering</h1>
  <p>Center an element with the .mx-auto class:</p>
  <div class="mx-auto bg-warning" style="width:150px">Centered</div>
</div>


<div class="container">
  <h1>Width Utilities</h1>
  <p>Set the width of an element with the w-* classes:</p>
  <div class="w-25 bg-warning">Width 25%</div>
  <div class="w-50 bg-warning">Width 50%</div>
  <div class="w-75 bg-warning">Width 75%</div>
  <div class="w-100 bg-warning">Width 100%</div>
  <div class="mw-100 bg-warning">Max Width 100%</div>
</div>


<div class="container">
  <h1>Height Utilities</h1>
  <p>Set the height of an element with the w-* classes:</p>
  <div style="height:200px;background-color:#ddd">
    <div class="h-25 d-inline-block p-2 bg-warning">Height 25%</div>
    <div class="h-50 d-inline-block p-2 bg-warning">Height 50%</div>
    <div class="h-75 d-inline-block p-2 bg-warning">Height 75%</div>
    <div class="h-100 d-inline-block p-2 bg-warning">Height 100%</div>
    <div class="mh-100 d-inline-block p-2 bg-warning" style="height:500px">Max Height 100%</div>
  </div>
</div>

<div class="container">
  <h1>Spacing Utilities</h1>
  <p>Set the spacing of an element with the {property}{sides}-{breakpoint}-{size} classes. Omit breakpoint if you want the padding or margin to work on all screen sizes.</p>
  <div class="pt-4 bg-warning">I only have a top padding (1.5rem = 24px)</div>
  <div class="p-5 bg-success">I have a padding on all sides (3rem = 48px)</div>
  <div class="m-5 pb-5 bg-info">I have a margin on all sides (3rem = 48px) and a bottom padding (3rem = 48px)</div>
</div>


<div class="container">
  <h1>Shadows</h1>
  <p>Use the shadow- classes to to add shadows to an element:</p>
  <div class="shadow-none p-4 mb-4 bg-light">No shadow</div>
  <div class="shadow-sm p-4 mb-4 bg-white">Small shadow</div>
  <div class="shadow p-4 mb-4 bg-white">Default shadow</div>
  <div class="shadow-lg p-4 mb-4 bg-white">Large shadow</div>
</div>

<div class="container">
  <h1>Vertical Align</h1>
  <p>Change the alignment of elements with the align classes (only works on inline, inline-block, inline-table and table cell elements):</p>
  <span class="align-baseline">baseline</span>
  <span class="align-top">top</span>
  <span class="align-middle">middle</span>
  <span class="align-bottom">bottom</span>
  <span class="align-text-top">text-top</span>
  <span class="align-text-bottom">text-bottom</span>
</div>


<div class="container mt-3">
  <h2>Responsive Embed</h2>
  <p>Create a responsive video and scale it nicely to the parent element.</p>
  
  <h2>Aspect ratio 1:1</h2>
  <div class="embed-responsive embed-responsive-1by1">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
  </div>
  <br>
  
  <h2>Aspect ratio 4:3</h2>
  <div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
  </div> 
  <br>
  
  <h2>Aspect ratio 16:9</h2>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
  </div>
  <br>
    
  <h2>Aspect ratio 21:9</h2>
  <div class="embed-responsive embed-responsive-21by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
  </div>
</div>


<div class="container">
  <h1>Visibility</h1>
  <p>Use the .visible or .invisible classes to control the visibility of elements. Note: These classes do not change the CSS display value. They only add visibility:visible or visibility:hidden to an element:</p>
  <div class="visible bg-success">I am visible</div>
  <div class="invisible bg-warning">I am invisible</div>
</div>

<p>[[[ see style for fixed ]]]</p>

<div class="container">
  <h1>Close Icon</h1>
  <p>Use the .close class to style a close icon. This is often used for alerts and modals. Note that we use the times; symbol to create the actual icon (a better lookiong "x"). Also note that it is right-aligned by default:</p>
  <div class="clearfix">
    <button type="button" class="close">&times;</button>
  </div>
</div>


<div class="container mt-3">
  <h2>Screen readers</h2>
  <p>Use the .sr-only class to hide an element on all devices, except screen readers:</p>
  <span class="sr-only">I will be hidden on all screens except for screen readers.</span>
</div>
