@extends('layouts.master')
@section('title')
    <title>Form Galeri Foto</title>
@endsection
@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-lg-6">
                        <form class="row" action="{{ route('services.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label>File (Foto):</label>
                                <input type="text" name="nama" id="jobs-application-name" class="form-control">
                            </div>
                            <div class="col-lg-6 bottommargin">
                                <label>File (Foto):</label><br>
                                <div class="file-input file-input-new">
                                <div class="kv-upload-progress kv-hidden" style="display: none;"><div class="progress">
                                    <div class="progress-bar bg-success progress-bar-success progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                        0%
                                     </div>
                                </div></div><div class="clearfix"></div>
                                <div class="input-group file-caption-main">
                                  <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                  <span class="file-caption-icon"></span>
                                  <input readonly="" class="file-caption-name" placeholder="Select file ..." title="">
                                </div>
                                      <button type="button" title="Clear all unprocessed files" class="btn btn-default btn-secondary fileinput-remove fileinput-remove-button" tabindex="500"><i class="icon-trash"></i>  <span class="hidden-xs">Remove</span></button>
                                      <button type="button" title="Abort ongoing upload" class="btn btn-default btn-secondary kv-hidden fileinput-cancel fileinput-cancel-button"><i class="icon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                                      
                                      <button type="submit" title="Upload selected files" class="btn btn-default btn-secondary fileinput-upload fileinput-upload-button" tabindex="500"><i class="icon-upload"></i>  <span class="hidden-xs">Upload</span></button>
                                      <div class="btn btn-primary btn-file" tabindex="500"><i class="icon-folder-open"></i>&nbsp;  <span class="hidden-xs">Pilih File</span><input id="input-1" type="file" class="file" data-show-preview="false"></div>
                                </div></div>
                                </div>
                            <div class="col-12 form-group">
                                <label>Keterangan:</label>
                                <input type="text" name="informasi" id="jobs-application-email" class="form-control">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <p><span class="dropcap">F</span>oster best practices effectiveness inspire breakthroughs solve
                            immunize turmoil. Policy dialogue peaceful The Elders rural global support. Process
                            inclusive
                            innovate readiness, public sector complexity. Lifting people up cornerstone partner,
                            technology
                            working families civic engagement activist recognize potential global network. Countries
                            tackling solution respond change-makers tackle. Assistance, giving; fight against
                            malnutrition
                            experience in the field lasting change scalable. Empowerment long-term, fairness policy
                            community progress social responsibility; Cesar Chavez recognition. Expanding community
                            ownership visionary indicator pursue these aspirations accessibility. Achieve; worldwide,
                            life-saving initiative facilitate. New approaches, John Lennon humanitarian relief fundraise
                            vaccine Jane Jacobs community health workers Oxfam. Our ambitions informal economies.</p>
                        <blockquote class="topmargin bottommargin">
                            <p>Human rights healthcare immunize; advancement grantees. Medical supplies; meaningful,
                                truth
                                technology catalytic effect. Promising development capacity building international
                                enable
                                poverty.</p>
                        </blockquote>
                        <div class="w-100">
                            <p>Provide, Aga Khan, interconnectivity governance fairness replicable, new approaches
                                visionary
                                implementation. End hunger evolution, future promising development youth. Public sector,
                                small-scale farmers; harness facilitate gender. Contribution dedicated global change
                                movements, prosperity accelerate progress citizens of change. Elevate; accelerate reduce
                                child mortality; billionaire philanthropy fluctuation, plumpy'nut care opportunity
                                catalyze.
                                Partner deep.</p>
                        </div>
                        <div class="w-100">
                            <p>Frontline harness criteria governance freedom contribution. Campaign Angelina Jolie
                                natural
                                resources, Rockefeller peaceful philanthropy human potential. Justice; outcomes reduce
                                carbon emissions nonviolent resistance human being. Solve innovate aid communities;
                                benefit
                                truth rural development UNICEF meaningful work. Generosity Action Against Hunger relief;
                                many voices impact crisis situation poverty pride. Vaccine carbon.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
