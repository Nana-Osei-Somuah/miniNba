function validateForm(){
  
    const Email = Form['username']['value'];
  
  // regex to check if the admin email follows the correct email form
    const emver = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!emver.test(Email)){
      alert('Invalid email! Use this format: hi@example.com');
      document.Form.username.focus() ;
      return false;
    }
  
    
  }