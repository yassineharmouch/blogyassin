@extends('layouts.master')
  @section('contact')
    <div class="col-lg-6">    
    
     @if($message = Session::get('success'))

          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
          </div>
          @endif
   
      
     
       <form id="contact_form" method="post" action="{{ url('contact_us/submit') }}"role="form" class="php-email-form">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Detail"   >
              </div>
        
                <div class="col-md-6 form-group">
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email Detail">
              </div>
            </div>
            <div class="form-group">
                <input type="text" name="objet" class="form-control" id="subject"  placeholder="Enter subject ">
              </div>
           
              <div class="form-group">
                <textarea name="message" class="form-control"  rows="5" id="message" placeholder="Enter Message Detail"></textarea>
              </div>
           
              <div class="form-group center-text">
                <input type="submit" class="btn btn-primary" value="envoyer" />
              </div>
            
              
          </form>

   
  </div>

  @endsection
  