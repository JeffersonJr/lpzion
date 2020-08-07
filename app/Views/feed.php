<div class="services-card-section spad">

    <div class="section-title">
        <h2>Lista de <span>Notícias</span></h2>
    </div>

    <!-- adicionar timeline simples adminlte -->
    <div class="row" style="margin-bottom: 10px;">
        <div class="timeline" v-for="item in itens" style="width: 100%">
            <!-- timeline time label -->
            <div class="time-label">
                <span class="bg-red">10 Feb. 2014</span>
            </div>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <div>
                <i class="fa fa-github bg-blue"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                    <h1 class="timeline-header"><a href="#">Notícia urgente sobre Lagostas</a> assassinas do Alaska </h1>
                    <div class="timeline-footer">
                        <a class="read-more">Read more</a>
                    </div>
                </div>
            </div>
            <!-- END timeline item -->
            <!-- timeline item -->
        </div>
    </div>

</div>