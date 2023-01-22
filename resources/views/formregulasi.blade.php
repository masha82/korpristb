@extends('layouts.master')
@section('title')
    <title>Form Regulasi/Dasar Hukum</title>
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
                                <label>Judul Regulasi:</label>
                                <input type="text" name="nama" id="jobs-application-name" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Nomor Regulasi:</label>
                                <input type="text" name="informasi" id="jobs-application-email" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Jenis Regulasi:</label>
                                <input type="text" name="mekanisme" id="jobs-application-phone" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Dokumen:</label>
                                <input type="text" name="syarat" id="jobs-application-location" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Status:</label>
                                <input type="text" name="keterangan" id="jobs-application-location" class="form-control">
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
