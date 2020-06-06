import React from 'react'

export default props =>
    <React.Fragment>
        <h1>Olá, Bom dia {props.nome}!</h1>
        <h1>Idade: {props.idade}</h1>
        <h1>Até breve!</h1>
    </React.Fragment>

/*Dois ou mais elementos precisam ser "envolvidos" para que sejam renderizados na página*/
/*Por isso foi necessário utilizar o <React.Fragment>.
O mesmo poderia ser feito utilizando a tag <div>, porém, poderá haver alguma alteração no layout da página*/
    /*<div>
        <h1>Olá, Bom dia {props.nome}!</h1>
        <h1>Idade: {props.idade}</h1>
        <h1>Até breve!</h1>
    </div>*/