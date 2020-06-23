<template>
    <div class="col-lg-3 col-6">
    <!-- small box -->
        <div class="small-box bg-info" v-bind:style="defineCor">
                <div class="inner">
                    <h3>{{qtd}}</h3>
                    <p>{{titulo}}</p>
                </div>
                <div class="icon">
                    <i v-bind:class="icon"></i>
                </div>
                <a v-bind:href="url" class="small-box-footer">Ver mais <i class="ion-ios-redo-outline"></i></a>
        </div>
    </div>
    
</template>

<script>
    export default {
        props:['qtd', 'titulo', 'url', 'cor', 'icon'],
        computed:{

            defineCor:function(){
                return "background-color: "+this.cor+" !important;"
            }

        }
       
    }
</script>

<style media="screen">    
    .bg-info, .bg-info > a {
    color: #fff !important;
    }
    .bg-info {
        background-color: #17a2b8 !important;
    }
    .small-box {
    border-radius: .2544rem;
    box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);
    display: block;
    margin-bottom: 20px;
    position: relative;
    }

    .small-box > .inner {
    padding: 10px;
    }
    .small-box h3, .col-md-3 .small-box h3, .col-xl-3 .small-box h3 {
    font-size: 2.2rem;
    }
    .small-box h3 {
    font-size: 2.2rem;
    font-weight: 700;
    margin: 0 0 10px 0;
    padding: 0;
    white-space: nowrap;
    }
    .small-box p {
    font-size: 1rem;
    }
    p {
    margin-top: 0;
    margin-bottom: 1rem;
    }
    .small-box .icon {
    color: rgba(0, 0, 0, 0.15);
    z-index: 0;
    
    }
    .small-box .icon > i {
    font-size: 90px;
    position: absolute;
    right: 15px;
    top: 15px;
    transition: all .3s linear;
    }
    .small-box .icon > i.ion {
    font-size: 60px;
    top: 15px;
    }
    .small-box > .small-box-footer {
    background: rgba(0,0,0,.1);
    color: rgba(255,255,255,.8);
    display: block;
    padding: 3px 0;
    position: relative;
    text-align: center;
    text-decoration: none;
    z-index: 10;
    }

    .small-box:hover .icon{
        font-size: 95px;
        text-decoration: none;
    }

    

</style>