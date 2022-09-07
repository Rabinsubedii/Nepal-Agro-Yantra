       <!-- footer  -->
       <footer>
           <div class="footer-body">
               <div class="container">
                   <div class="row">
                       <div class="col-md-3">
                           <div class="footer-head">
                               <p>Nepal Agro
                                   Yantra Pvt. Ltd</p>
                               @foreach($setting as $item)

                               <img src="{{asset('uploads/footerlogo/'.$item->footerlogo)}}"
                                   class="footer-img img-fluid" alt="footer logo">
                               @endforeach

                           </div>
                       </div>

                       <div class="col-md-3">
                           <div class="related-link">
                               <p>Relate Link</p>
                               <div class="footer-list-item">
                                   @foreach ($footermenu as $item)
                                   <li> <a href="{{url($item->url)}}">{{$item->name}}
                                       </a>
                                   </li>
                                   @endforeach
                               </div>
                           </div>
                       </div>

                       <div class="col-md-3">
                           <div class="related-link">
                               <p>Product</p>
                               <div class="footer-list-item">
                                   @foreach ($footerproduct as $item)
                                   <li> <a href="{{url('allproduct')}}">{{$item->title}}
                                       </a>
                                   </li>

                                   @endforeach
                               </div>
                           </div>
                       </div>

                       <div class="col-md-3">
                           <div class="related-link">
                               <p>Services</p>
                               <div class="footer-list-item">
                                   @foreach($footerservice as $item)
                                   <li> <a href="{{url('allservice')}}">{{$item->title}}
                                       </a>
                                   </li>
                                   @endforeach
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="sub-footer">
                   <p>© 2022 Nepal Agro Yantra Pvt. Ltd.</p>
               </div>
           </div>
           </div>

       </footer>
