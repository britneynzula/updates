@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="jumbotron  ">
        <div class="container">
            <p style=" text-align: center">
                 <!--<h3><i>Nothing in the Notice Board yet...</i></h3>-->
            </p>
        </div>

<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Notice List</th>
                                <th scope="col">Date</th>
                                <th scope="col">~</th>
                                <th scope="col">*</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>OPENING PROGRAMME 
   <span class="badge badge-primary">new</span></td>
                                <td>8-31-2021</td>
                                <td><a href="https://web.archive.org/web/20220117173719/https://egojittc.ac.ke/assets/img/notice1.jpeg">click to download</a></td>
                                <td><img height="300" src="https://web.archive.org/web/20220117173719im_/https://egojittc.ac.ke/assets/img/notice1.jpeg"></td>
                            </tr>
                             
                               
                              
                            
                        </tbody>
                    </table>
    </div>
</div>
@endsection