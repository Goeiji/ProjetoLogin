import React, { Component } from 'react'
import ReactDOM from 'react-dom'
/*import Primeiro from './componentes/Primeiro'*/
/*import BomDia from './componentes/BomDia'*/
/*import {BoaTarde, BoaNoite} from './componentes/Multiplos'*/
// import Saudacao from './componentes/Saudacao'
import Pai from './componentes/Pai'
import Filho from './componentes/Filho'

/*ReactDOM.render(<Primeiro />, document.getElementById('root'))*/

/*ReactDOM.render(<BomDia nome="Jorge" idade={20} />, document.getElementById('root'))*/

/*ReactDOM.render(
    <div>
        <BoaTarde nome="Ana" />
        <BoaNoite nome="Bia" />
    </div>
    , document.getElementById('root')
)*/

/*ReactDOM.render(
    <div>
        <Saudacao tipo="Bom dia" nome="Ana" />
    </div>
    , document.getElementById('root')
)*/

ReactDOM.render(
    <div>
        <Pai nome="Paulo" sobrenome="Silva">
            <Filho nome="John" />
            <Filho nome="Mau" />
            <Filho nome="Lenny" />     
        </Pai>
    </div>
,document.getElementById('root'))