<div class="col-lg-4 sidebar" style="margin-top: 45px;">
<div class="single-widget recent-posts-widget">
        <h4 class="title">Recent Product</h4>
        <div class="blog-list ">
            @foreach($recent as $data)
            <br>
            <div class="single-recent-post d-flex flex-row">
                <div class="recent-thumb">
                    <img src="{{ asset ('assets/img/barang/' .$data->gambar. '' ) }}" style="margin-top: 10px; max-width: 130px; max-height: 130px;" alt="">
                </div>
                
                <div class="recent-details">
                    <a href="/barangs/singleproduk/{{ $data->id }}">
                        <br>
                        <h5>
                            &nbsp&nbsp {{ $data->nama_barang }}
                        </h5>
                    </a>
                    <p>
                    &nbsp&nbsp{{ $data->created_at->diffForHumans() }}
                    </p>
                </div>
            </div>  
            @endforeach                                                                                                                                                              
        </div>                              
    </div>
</div>