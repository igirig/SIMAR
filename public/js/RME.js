
$(function(){
    function addResiduo() {
        var rootElement = document.createElement('div');
            rootElement.setAttribute('class', 'row');
      
      
        var contents = '<div class="form-group col-md-3"><input name="ticket_name" type="text" class="form-control" placeholder="Ticket Name"></div>';
      
      
        rootElement.innerHTML = contents;
      
        return rootElement;
      }
});