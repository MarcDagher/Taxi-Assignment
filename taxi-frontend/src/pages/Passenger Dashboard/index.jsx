import "./index.css"
import Header from "../../components/ui/header"
import Button from "../../components/ui/button"


const PassengerDashboard = () => {

  return <>
  <div className="wrapper">
    <Header />
  
      <div className="box">
        <div className="inputs-col">
          <div className="text-col">
            <p>Taxina</p>
            <p>Book a Ride</p>
          </div>
          <div className="input-container">
              <input type="text" name="pickup" placeholder="Pickup"/>
              <input type="text" name="destintion" placeholder="Destination"/>
          </div>
          {/* <img src="public/globe.svg" alt="globe"/> */}
        </div>
          <Button>Request</Button>
    </div>
  </div>
  </>
}

export default PassengerDashboard