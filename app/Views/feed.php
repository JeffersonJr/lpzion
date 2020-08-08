<div class="services-card-section spad">

    <div class="section-title">
        <h2>Lista de <span>Notícias</span></h2>
    </div>

    <!-- adicionar timeline simples adminlte -->
    <div class="row" style="margin-bottom: 10px;">
        <div class="timeline" style="width: 100%">
            <div class="container timeline" v-for="item in itens">
                <!-- timeline time label -->
                <div class="time-label">
                    <span class="bg-red" id="post-date-1" v-html="item.datas">10 Feb. 2014</span>
                </div>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <div>
                    <i class="fa fa-github bg-blue"></i>
                    <div class="timeline-item">
                        <!-- Usar apenas se ele quiser hora <span class="time"><i class="fas fa-clock"></i> 12:05</span> -->
                        <div class="timeline-header">
                            <h5 class="timeline-header">
                                <a href="#" class="text-info" id="post-title-1">{{item.title}} - </a>
                                <a v-html="item.desc" style="font-family: 'Montserrat Light'; font-size: 18px"></a>
                            </h5>
                            <hr/>
                            <a href="#" class="read-more text-info">Saber mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END timeline item -->
            <!-- timeline item -->
        </div>
    </div>

</div>