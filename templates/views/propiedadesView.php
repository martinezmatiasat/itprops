<?php
$vendorCss = ['datatables/dataTables.bootstrap4.min.css'];
$pageLevelCss = ['css/pages/page-users.css'];
require_once INCLUDES . 'header.php';
?>

<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <section class="users-list-wrapper">
         <!-- Filter starts -->
         <div class="users-list-filter px-2">
            <form>
               <div class="row border rounded py-2 mb-2 mx-n2">
                  <div class="col-12 col-sm-6 col-lg-3">
                     <label for="list-verified">Verified</label>
                     <fieldset class="form-group">
                        <select id="list-verified" class="form-control list-verified">
                           <option value="Any">Any</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-3">
                     <label for="users-list-role">Role</label>
                     <fieldset class="form-group">
                        <select id="users-list-role" class="form-control">
                           <option value="Any">Any</option>
                           <option value="User">User</option>
                           <option value="Staff">Staff</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-3">
                     <label for="users-list-status">Status</label>
                     <fieldset class="form-group">
                        <select id="users-list-status" class="form-control">
                           <option value="Any">Any</option>
                           <option value="Active">Active</option>
                           <option value="Close">Close</option>
                           <option value="Banned">Banned</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                     <button type="reset" class="btn btn-primary btn-block users-list-clear glow mb-0">Clear</button>
                  </div>
               </div>
            </form>
         </div>
         <!-- Filter ends -->

         <!-- Table starts -->
         <div class="users-list-table">
            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <div class="card-content">
                        <div class="card-body">
                           <!-- Datatable starts -->
                           <div class="table-responsive">
                              <table class="table list-datatable">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Username</th>
                                       <th>Name</th>
                                       <th class="text-truncate">Last Activity</th>
                                       <th>Verified</th>
                                       <th>Role</th>
                                       <th>Status</th>
                                       <th>Edit</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>300</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-2.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>dean3004</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Dean Stanley</td>
                                       <td>2019/04/30</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>301</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-4.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>zena0604</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Zena Buckley</td>
                                       <td>2020/04/06</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>302</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-6.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>delilah0301</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Delilah Moon</td>
                                       <td>2020/01/03</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>303</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-3.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>hillary1807</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Hillary Rasmussen</td>
                                       <td>2019/07/18</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>304</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-5.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>herman2003</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Herman Tate</td>
                                       <td>2020/03/20</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>305</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-7.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>kuame3008</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Kuame Ford</td>
                                       <td>2019/08/30</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>306</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-9.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>fulton2009</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Fulton Stafford</td>
                                       <td>2019/09/20</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>307</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-11.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>piper0508</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Piper Jordan</td>
                                       <td>2020/08/05</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>308</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-13.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>neil1002</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Neil Sosa</td>
                                       <td>2019/02/10</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>309</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-15.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>caldwell2402</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Caldwell Chapman</td>
                                       <td>2020/02/24</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>310</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-17.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>wesley0508</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Wesley Oneil</td>
                                       <td>2020/08/05</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>311</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-19.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>tallulah2009</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Tallulah Fleming</td>
                                       <td>2019/09/20</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>312</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-8.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>iris2505</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Iris Maddox</td>
                                       <td>2019/05/25</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>313</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-21.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>caleb1504</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Caleb Bradley</td>
                                       <td>2020/04/15</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>314</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-10.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>illiana0410</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Illiana Grimes</td>
                                       <td>2019/10/04</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>315</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-23.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>chester0902</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Chester Estes</td>
                                       <td>2020/02/09</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>316</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-25.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>gregory2309</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Gregory Hayden</td>
                                       <td>2019/09/23</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>317</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-12.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>jescie1802</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Jescie Parker</td>
                                       <td>2019/02/18</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>318</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-14.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>sydney3101</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Sydney Cabrera</td>
                                       <td>2020/01/31</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>319</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-1.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>gray2702</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Gray Valenzuela</td>
                                       <td>2020/02/27</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-warning">Close</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>320</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-3.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>hoyt0305</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Hoyt Ellison</td>
                                       <td>2020/05/03</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>321</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-5.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>damon0209</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Damon Berry</td>
                                       <td>2019/09/02</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>322</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-16.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>kelsie0511</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Kelsie Dunlap</td>
                                       <td>2019/11/05</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-warning">Close</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>323</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-18.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>abel1606</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Abel Dunn</td>
                                       <td>2020/06/16</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>324</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-20.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>nina2208</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Nina Byers</td>
                                       <td>2019/08/22</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-warning">Close</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>325</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-7.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>erasmus1809</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Erasmus Walter</td>
                                       <td>2019/09/18</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>326</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-22.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>yael2612</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Yael Marshall</td>
                                       <td>2019/12/26</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-warning">Close</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>327</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-9.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>thomas2012</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Thomas Dudley</td>
                                       <td>2019/12/20</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>328</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-24.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>althea2810</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Althea Turner</td>
                                       <td>2019/10/28</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>329</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-26.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>jena2206</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Jena Schroeder</td>
                                       <td>2019/06/22</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>330</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-2.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>hyacinth2201</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Hyacinth Maxwell</td>
                                       <td>2019/01/22</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>331</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-4.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>madeson1907</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Madeson Byers</td>
                                       <td>2020/07/19</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>332</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-11.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>elmo0707</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Elmo Tran</td>
                                       <td>2020/07/07</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>333</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-6.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>shelley0309</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Shelley Eaton</td>
                                       <td>2019/09/03</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>334</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-13.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>graham0301</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Graham Flores</td>
                                       <td>2019/01/03</td>
                                       <td>No</td>
                                       <td>Staff</td>
                                       <td><span class="badge bg-light-danger">Banned</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>335</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src="../../../app-assets/img/portrait/small/avatar-s-15.png" class="avatar mr-2" alt="avatar" width="30" height="30">
                                             <span>erasmus2110</span>
                                          </a>
                                       </td>
                                       <td class="text-truncate">Erasmus Mclaughlin</td>
                                       <td>2019/10/21</td>
                                       <td>Yes</td>
                                       <td>User </td>
                                       <td><span class="badge bg-light-success">Active</span></td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!-- Datatable ends -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Table ends -->
      </section>

   </div>
</div>

<?php 
$pageVendorJs = ['datatable/jquery.dataTables.min.js', 'datatable/dataTables.bootstrap4.min.js'];
$pageLevelJs = ['js/list-datatable.js', 'js/page-users.js'];
require_once INCLUDES . 'footer.php';
?>