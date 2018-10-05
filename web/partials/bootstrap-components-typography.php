<h1 class="mt-5">::::Typography</h1>
<hr/>
<a href="https://www.w3schools.com/bootstrap4/bootstrap_typography.asp" target="_blank"/>w3schools</a>
<div class="container">
  <h1>h1 Bootstrap <span style="font-size:40px;">Bootstrap</span> heading (2.5rem = 40px)</h1>
  <h2>h2 Bootstrap <span style="font-size:32px;">Bootstrap</span> heading (2rem = 32px)</h2>
  <h3>h3 Bootstrap <span style="font-size:28px;">Bootstrap</span> heading (1.75rem = 28px)</h3>
  <h4>h4 Bootstrap <span style="font-size:24px;">Bootstrap</span> heading (1.5rem = 24px)</h4>
  <h5>h5 Bootstrap <span style="font-size:20px;">Bootstrap</span> heading (1.25rem = 20px)</h5>
  <h6>h6 Bootstrap <span style="font-size:16px;">Bootstrap</span> heading (1rem = 16px)</h6>
</div>
<div class="container">
  <h1>Display Headings</h1>
  <p>Display headings are used to stand out more than normal headings (larger font-size and lighter font-weight):</p>
  <h1 class="display-1">Display 1</h1>
  <h1 class="display-2">Display 2</h1>
  <h1 class="display-3">Display 3</h1>
  <h1 class="display-4">Display 4</h1>
</div>
<div class="container">
  <h1>Lighter, Secondary Text</h1>
  <p>The small element is used to create a lighter, secondary text in any heading:</p>       
  <h1>h1 heading <small>secondary text</small></h1>
  <h2>h2 heading <small>secondary text</small></h2>
  <h3>h3 heading <small>secondary text</small></h3>
  <h4>h4 heading <small>secondary text</small></h4>
  <h5>h5 heading <small>secondary text</small></h5>
  <h6>h6 heading <small>secondary text</small></h6>
</div>
<div class="container">
  <h1>Highlight Text</h1>    
  <p>Use the mark element to <mark>highlight</mark> text.</p>
</div>
<div class="container">
  <h1>Abbreviations</h1>
  <p>The abbr element is used to mark up an abbreviation or acronym:</p>
  <p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>
</div>
<div class="container">
  <h1>Blockquotes</h1>
  <p>The blockquote element is used to present content from another source:</p>
  <blockquote class="blockquote">
    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
    <footer class="blockquote-footer">From WWF's website</footer>
  </blockquote>
</div>
<div class="container">
  <h1>Description Lists</h1>    
  <p>The dl element indicates a description list:</p>
  <dl>
    <dt>Coffee</dt>
    <dd>- black hot drink</dd>
    <dt>Milk</dt>
    <dd>- white cold drink</dd>
  </dl>     
</div>
<div class="container">
  <h1>Code Snippets</h1>
  <p>Inline snippets of code should be embedded in the code element:</p>
  <p>The following HTML elements: <code>span</code>, <code>section</code>, and <code>div</code> defines a section in a document.</p>
</div>
<div class="container">
  <h1>Keyboard Inputs</h1>
  <p>To indicate input that is typically entered via the keyboard, use the kbd element:</p>
  <p>Use <kbd>ctrl + p</kbd> to open the Print dialog box.</p>
</div>
<div class="container">
<h1>Multiple Code Lines</h1>
<p>For multiple lines of code, use the pre element:</p>
<pre>
Text in a pre element
is displayed in a fixed-width
font, and it preserves
both      spaces and
line breaks.
</pre>
</div>

<h1 class="mt-5">::::Colors</h1>
<hr/>
<a href="https://www.w3schools.com/bootstrap4/bootstrap_colors.asp" target="_blank"/>w3schools</a>
<div class="container">
  <h2>Contextual Colors</h2>
  <p>Use the contextual classes to provide "meaning through colors":</p>
  <p class="text-muted">This text is muted.</p>
  <p class="text-primary">This text is important.</p>
  <p class="text-success">This text indicates success.</p>
  <p class="text-info">This text represents some information.</p>
  <p class="text-warning">This text represents a warning.</p>
  <p class="text-danger">This text represents danger.</p>
  <p class="text-secondary">Secondary text.</p>
  <p class="text-dark">This text is dark grey.</p>
  <p class="text-body">Default body color (often black).</p>
  <p class="text-light">This text is light grey (on white background).</p>
  <p class="text-white">This text is white (on white background).</p>
</div>
<div class="container">
  <h2>Contextual Link Colors</h2>
  <p>Hover over the links.</p>
  <a href="#" class="text-muted">Muted link.</a>
  <a href="#" class="text-primary">Primary link.</a>
  <a href="#" class="text-success">Success link.</a>
  <a href="#" class="text-info">Info link.</a>
  <a href="#" class="text-warning">Warning link.</a>
  <a href="#" class="text-danger">Danger link.</a>
  <a href="#" class="text-secondary">Secondary link.</a>
  <a href="#" class="text-dark">Dark grey link.</a>
  <a href="#" class="text-body">Body/black link.</a>
  <a href="#" class="text-light">Light grey link.</a>
</div>
<div class="container">
  <h2>Opacity Text Colors</h2>
  <p>Add 50% opacity for black or white text with the .text-black-50 or .text-white-50 classes:</p>
  <p class="text-black-50">Black text with 50% opacity on white background</p>
  <p class="text-white-50 bg-dark">White text with 50% opacity on black background</p>
</div>
<div class="container">
  <h2>Contextual Backgrounds</h2>
  <p>Use the contextual background classes to provide "meaning through colors".</p>
  <p>Note that you can also add a .text-* class if you want a different text color:</p>
  <p class="bg-primary text-white">This text is important.</p>
  <p class="bg-success text-white">This text indicates success.</p>
  <p class="bg-info text-white">This text represents some information.</p>
  <p class="bg-warning text-white">This text represents a warning.</p>
  <p class="bg-danger text-white">This text represents danger.</p>
  <p class="bg-secondary text-white">Secondary background color.</p>
  <p class="bg-dark text-white">Dark grey background color.</p>
  <p class="bg-light text-dark">Light grey background color.</p>
</div>
