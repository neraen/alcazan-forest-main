import React, {useEffect, useLayoutEffect, useState} from 'react'
import '../../../styles/app.css'
import Player from "../Player";
//style={{backgroundImage: "url(../../../img/map/" + props.data.background + ")"}}
const Case = (props) => {
    return <>
        <div className="case" style={{border: "rgba(255, 255, 255, .5) 1px solid"}} >

            { props.otherPlayer && <Player player={props.otherPlayer}/>}
        </div>
    </>
}

export default Case