
			
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="sparkline12-hd">
											<div class="main-sparkline12-hd">
												<h1>PMB</h1>
											</div>
										</div>

										<div class="tinymce-single">
												<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Judul</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Tag SEO</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Kategori</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" name="account">
																			<option>Berita</option>
																			<option>Pengumuman</option>
																			<option>Rekrutmen</option>
																			<option>Kerjasama</option>
																		</select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Tanggal Rilis</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="date" class="form-control" value="<?php  echo date('Y-m-d');  ?>" />
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Foto</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="file-upload-inner ts-forms">
                                                                    <div class="input prepend-small-btn">
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input type="file" onchange="document.getElementById('prepend-small-btn').value = this.value;">
                                                                        </div>
                                                                        <input type="text" id="prepend-small-btn" placeholder="no file selected">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Isi</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea type="text" class="form-control"  id="summernote2"> </textarea >
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">  
																		<input  class="btn btn-sm btn-primary login-submit-cs"  type="submit" value="Simpan"> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
												</form>
                                            
											
										</div>
									</div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" data-editable="true">Task</th>
                                                <th data-field="email" data-editable="true">Email</th>
                                                <th data-field="phone" data-editable="true">Phone</th>
                                                <th data-field="complete">Completed</th>
                                                <th data-field="task" data-editable="true">Task</th>
                                                <th data-field="date" data-editable="true">Date</th>
                                                <th data-field="price" data-editable="true">Price</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>1</td>
                                                <td>Web Development</td>
                                                <td>admin@uttara.com</td>
                                                <td>+8801962067309</td>
                                                <td class="datatable-ct"><span class="pie">1/6</span>
                                                </td>
                                                <td>10%</td>
                                                <td>Jul 14, 2017</td>
                                                <td>$5455</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>2</td>
                                                <td>Graphic Design</td>
                                                <td>fox@itpark.com</td>
                                                <td>+8801762067304</td>
                                                <td class="datatable-ct"><span class="pie">230/360</span>
                                                </td>
                                                <td>70%</td>
                                                <td>fab 2, 2017</td>
                                                <td>$8756</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>3</td>
                                                <td>Software Development</td>
                                                <td>gumre@hash.com</td>
                                                <td>+8801862067308</td>
                                                <td class="datatable-ct"><span class="pie">0.42/1.461</span>
                                                </td>
                                                <td>5%</td>
                                                <td>Seb 5, 2017</td>
                                                <td>$9875</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>4</td>
                                                <td>Woocommerce</td>
                                                <td>kyum@frok.com</td>
                                                <td>+8801962066547</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>Oct 10, 2017</td>
                                                <td>$3254</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>5</td>
                                                <td>Joomla</td>
                                                <td>jams@game.com</td>
                                                <td>+8801962098745</td>
                                                <td class="datatable-ct"><span class="pie">200,133</span>
                                                </td>
                                                <td>80%</td>
                                                <td>Nov 20, 2017</td>
                                                <td>$58745</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>6</td>
                                                <td>Wordpress</td>
                                                <td>flat@yem.com</td>
                                                <td>+8801962254781</td>
                                                <td class="datatable-ct"><span class="pie">0.42,1.051</span>
                                                </td>
                                                <td>30%</td>
                                                <td>Aug 25, 2017</td>
                                                <td>$789879</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>7</td>
                                                <td>Ecommerce</td>
                                                <td>hasan@wpm.com</td>
                                                <td>+8801962254863</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>July 17, 2017</td>
                                                <td>$21424</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>8</td>
                                                <td>Android Apps</td>
                                                <td>ATM@devep.com</td>
                                                <td>+8801962875469</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>June 11, 2017</td>
                                                <td>$78978</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>9</td>
                                                <td>Prestashop</td>
                                                <td>presta@Prest.com</td>
                                                <td>+8801962067524</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>May 9, 2017</td>
                                                <td>$45645</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>10</td>
                                                <td>Game Development</td>
                                                <td>Dev@game.com</td>
                                                <td>+8801962067457</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>April 5, 2017</td>
                                                <td>$4564545</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>11</td>
                                                <td>Angular Js</td>
                                                <td>gular@angular.com</td>
                                                <td>+8801962067124</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>Dec 1, 2017</td>
                                                <td>$645455</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>12</td>
                                                <td>Opencart</td>
                                                <td>open@cart.com</td>
                                                <td>+8801962067587</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>Jan 6, 2017</td>
                                                <td>$78978</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>13</td>
                                                <td>Education</td>
                                                <td>john@example.com</td>
                                                <td>+8801962067471</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>Feb 6, 2016</td>
                                                <td>$456456</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>14</td>
                                                <td>Construction</td>
                                                <td>mary@example.com</td>
                                                <td>+8801962012457</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>Jan 6, 2016</td>
                                                <td>$87978</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>15</td>
                                                <td>Real Estate</td>
                                                <td>july@example.com</td>
                                                <td>+8801962067309</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>Dec 1, 2016</td>
                                                <td>$454554</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>16</td>
                                                <td>Personal Regume</td>
                                                <td>john@example.com</td>
                                                <td>+8801962067306</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>May 9, 2016</td>
                                                <td>$564555</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>17</td>
                                                <td>Admin Template</td>
                                                <td>mary@example.com</td>
                                                <td>+8801962067305</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>June 11, 2016</td>
                                                <td>$454565</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>18</td>
                                                <td>FrontEnd</td>
                                                <td>july@example.com</td>
                                                <td>+8801962067304</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>May 9, 2015</td>
                                                <td>$456546</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>19</td>
                                                <td>Backend</td>
                                                <td>john@range.com</td>
                                                <td>+8801962067303</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>Feb 9, 2014</td>
                                                <td>$564554</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>20</td>
                                                <td>Java Advance</td>
                                                <td>lamon@ghs.com</td>
                                                <td>+8801962067302</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>July 6, 2014</td>
                                                <td>$789889</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>21</td>
                                                <td>Jquery Advance</td>
                                                <td>hasad@uth.com</td>
                                                <td>+8801962067301</td>
                                                <td class="datatable-ct"><span class="pie">2,7</span>
                                                </td>
                                                <td>15%</td>
                                                <td>Jun 6, 2013</td>
                                                <td>$4565656</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
