let InlineFaq = {};
  InlineFaq.toggle = (element) => {
    element.classList.toggle('--open');
    element.nextElementSibling.classList.toggle('--open');
  };

  $(document).on('click', '.js-faq-toggle', function(e){
    let element = e.target;
    InlineFaq.toggle(element);
  });
module.exports = InlineFaq;