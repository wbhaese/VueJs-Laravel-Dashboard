<template>
    <div class="sidebar">
        <div class="top">
            <div class="avatar">
                <span><i class="fa fa-user icon"></i></span>
            </div>
            <div class="info">
                <p class="name">Wallace</p>
                <p class="status">online</p>
            </div>            
        </div>

        <div class="menu">
            <ul>
                <li><router-link :to="{name: 'home'}"><i class="fa fa-home" /> Início</router-link></li>
                <li><router-link :to="{name: 'clients'}"><i class="fa fa-box" /> Clientes</router-link></li>
                <li><router-link :to="{name: 'products'}"><i class="fa fa-box" /> Produtos</router-link></li>
                <li><router-link :to="{name: 'vendas'}"><i class="fa fa-store" /> Vendas</router-link></li>
                <li><router-link :to="{name: 'relatorios'}"><i class="fa fa-chart-bar" /> Relatórios</router-link></li>
            </ul>

        </div>
    </div>
</template>

<script>

export default {
    name: 'SideBarComponent', 
}
</script>

<style lang="scss">
    .sidebar{

        .top{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px 5px;
            margin-top: 50px;

            .avatar{
                margin-right: 10px;

                span {
                    // display: block;
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    background-color: #CCC;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 25px;
                    color: #666666;
                }            
            }

            .info{

                p{
                    margin: 0;
                    color:#FFF;
                }

                .name{
                    font-size: 14px;
                }

                .status{
                    margin: 0;
                    font-size: 10px;
                }
            }            
        }

        .menu {
            margin-top: 15px;
            padding: 10px 20px;

            ul li {
                list-style-type: none;
                padding-left: 0rem !important;
                margin: 15px 0;
                font-size: 16px;
                font-weight: 200;
            }
            
            a {
                color: #FFF;
                text-decoration: none;
            }
        }
    }

</style>

