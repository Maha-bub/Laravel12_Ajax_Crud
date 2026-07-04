   <!-- The Modal -->
   <div class="modal col-8" id="myModal">
       <div class="modal-dialog col-8">
           <div class="modal-content">

               <!-- Modal Header -->
               <div class="modal-header">
                   <h4 class="modal-title">Student Entry</h4>
                   <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
               </div>

               <!-- Modal body -->
               <div class="modal-body">
                   <form id="StudentEntry">

                       @csrf
                       <div class="mb-3">
                           <label class="form-label">Name</label>
                           <input type="text" name="name" class="form-control" value="">
                       </div>

                       <div class="mb-3">
                           <label class="form-label">Email</label>
                           <input type="email" name="email" class="form-control" value="">
                       </div>

                       <div class="mb-3">
                           <label class="form-label">Address</label>
                           <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                       </div>



               </div>

               <!-- Modal footer -->
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary ">Save</button>
                   <button type="button" class= "btn btn-danger" data-bs-dismiss="modal">Close</button>
               </div>
               </form>

           </div>
       </div>
