@extends('layouts.master')
@section('title')
    <title>Form Layanan KORPRI</title>
@endsection
@section('content')
<section id="content">
    <div class="content-wrap">
    <div class="container clearfix">
    <div class="form-widget">
    <div class="form-result"></div>
    <div class="row">
    <div class="col-lg-6">
    <form class="row" action="include/form.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
    <div class="form-process">
    <div class="css3-spinner">
    <div class="css3-spinner-scaler"></div>
    </div>
    </div>
    <div class="col-12 form-group">
    <label>Nama Layanan:</label>
    <input type="text" name="jobs-application-name" id="jobs-application-name" class="form-control required valid" value="" placeholder="Enter your Full Name">
    </div>
    <div class="col-12 form-group">
    <label>Informasi Layanan:</label>
    <input type="email" name="jobs-application-email" id="jobs-application-email" class="form-control required" value="" placeholder="Enter your Email">
    </div>
    <div class="col-12 form-group">
    <label>Mekanisme:</label>
    <input type="text" name="jobs-application-phone" id="jobs-application-phone" class="form-control required" value="" placeholder="Enter your Phone">
    </div>
    <div class="col-12 form-group">
    <label>Persyaratan:</label>
    <input type="text" name="jobs-application-location" id="jobs-application-location" class="form-control" value="" placeholder="Enter your City as Location">
    </div>
    <div class="col-12 form-group">
    <label>Keterangan:</label>
    <input type="text" name="jobs-application-location" id="jobs-application-location" class="form-control" value="" placeholder="Enter your City as Location">
    </div>
    <div class="form-group">
    <label>Upload CV:</label>
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
          <button type="button" title="Clear all unprocessed files" class="btn btn-danger fileinput-remove fileinput-remove-button" tabindex="500"><i class="icon-trash-alt1"></i> </button>
          <button type="button" title="Abort ongoing upload" class="btn btn-default btn-secondary kv-hidden fileinput-cancel fileinput-cancel-button"><i class="icon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
          <div class="btn btn-secondary btn-file" tabindex="500">  <span class="hidden-xs">Browse …</span><input type="file" id="jobs-application-resume" name="jobs-application-resume" class="form-select required" data-show-preview="false"></div>
    </div></div>
    </div>
    <div class="form-group">
    <label>Describe Yourself:</label>
    <textarea name="jobs-application-message" id="jobs-application-message" class="form-control required" cols="30" rows="10" aria-hidden="true" style="display: none;"></textarea><div role="application" class="tox tox-tinymce" aria-disabled="false" style="visibility: hidden; height: 254px;"><div class="tox-editor-container"><div data-alloy-vertical-dir="toptobottom" class="tox-editor-header"><div role="group" class="tox-toolbar-overlord" aria-disabled="false"><div role="group" class="tox-toolbar__primary"><div title="history" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Undo" title="Undo" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Redo" title="Redo" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z" fill-rule="nonzero"></path></svg></span></button></div><div title="styles" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button title="Formats" aria-label="Formats" aria-haspopup="true" type="button" unselectable="on" tabindex="-1" class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke" aria-expanded="false" style="user-select: none;"><span class="tox-tbtn__select-label">Paragraph</span><div class="tox-tbtn__select-chevron"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></div></button></div><div title="formatting" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Bold" title="Bold" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Italic" title="Italic" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z" fill-rule="evenodd"></path></svg></span></button></div><div title="alignment" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Align left" title="Align left" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Align center" title="Align center" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 010-2zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Align right" title="Align right" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Justify" title="Justify" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z" fill-rule="evenodd"></path></svg></span></button></div><div role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="More..." title="More..." aria-haspopup="true" type="button" data-alloy-tabstop="true" tabindex="-1" class="tox-tbtn" aria-expanded="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M6 10a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2zm12 0a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2zm-6 0a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2z" fill-rule="nonzero"></path></svg></span></button></div></div></div><div class="tox-anchorbar"></div></div><div class="tox-sidebar-wrap"><div class="tox-edit-area"><iframe id="jobs-application-message_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-0 for help." class="tox-edit-area__iframe"></iframe></div><div role="complementary" class="tox-sidebar"><div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;"><div class="tox-sidebar__pane-container"></div></div></div></div></div><div class="tox-statusbar"><div class="tox-statusbar__text-container"><div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false"><div role="button" data-index="0" tab-index="-1" aria-level="1" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">p</div></div><span class="tox-statusbar__branding"><a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5" rel="noopener" target="_blank" tabindex="-1" aria-label="Powered by Tiny">Powered by Tiny</a></span></div><div title="Resize" data-alloy-tabstop="true" tabindex="-1" class="tox-statusbar__resize-handle"><svg width="10" height="10"><g fill-rule="nonzero"><path d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z"></path></g></svg></div></div><div aria-hidden="true" class="tox-throbber" style="display: none;"></div></div>
    </div>
    </div>
    <div class="col-12 d-none">
    <input type="text" id="jobs-application-botcheck" name="jobs-application-botcheck" value="">
    </div>
    <div class="col-12">
    <button type="submit" name="jobs-application-submit" class="btn btn-secondary">Send Message</button>
    </div>
    <input type="hidden" name="prefix" value="jobs-application-">
    </form>
    </div>
    <div class="col-lg-6 ps-lg-5">
    <p><span class="dropcap">F</span>oster best practices effectiveness inspire breakthroughs solve immunize turmoil. Policy dialogue peaceful The Elders rural global support. Process inclusive innovate readiness, public sector complexity. Lifting people up cornerstone partner, technology working families civic engagement activist recognize potential global network. Countries tackling solution respond change-makers tackle. Assistance, giving; fight against malnutrition experience in the field lasting change scalable. Empowerment long-term, fairness policy community progress social responsibility; Cesar Chavez recognition. Expanding community ownership visionary indicator pursue these aspirations accessibility. Achieve; worldwide, life-saving initiative facilitate. New approaches, John Lennon humanitarian relief fundraise vaccine Jane Jacobs community health workers Oxfam. Our ambitions informal economies.</p>
    <blockquote class="topmargin bottommargin">
    <p>Human rights healthcare immunize; advancement grantees. Medical supplies; meaningful, truth technology catalytic effect. Promising development capacity building international enable poverty.</p>
    </blockquote>
    <div class="w-100">
    <p>Provide, Aga Khan, interconnectivity governance fairness replicable, new approaches visionary implementation. End hunger evolution, future promising development youth. Public sector, small-scale farmers; harness facilitate gender. Contribution dedicated global change movements, prosperity accelerate progress citizens of change. Elevate; accelerate reduce child mortality; billionaire philanthropy fluctuation, plumpy'nut care opportunity catalyze. Partner deep.</p>
    </div>
    <div class="w-100">
    <p>Frontline harness criteria governance freedom contribution. Campaign Angelina Jolie natural resources, Rockefeller peaceful philanthropy human potential. Justice; outcomes reduce carbon emissions nonviolent resistance human being. Solve innovate aid communities; benefit truth rural development UNICEF meaningful work. Generosity Action Against Hunger relief; many voices impact crisis situation poverty pride. Vaccine carbon.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection