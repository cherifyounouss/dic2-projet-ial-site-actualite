
package users;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;


/**
 * <p>Classe Java pour SQLException complex type.
 * 
 * <p>Le fragment de schéma suivant indique le contenu attendu figurant dans cette classe.
 * 
 * <pre>
 * &lt;complexType name="SQLException">
 *   &lt;complexContent>
 *     &lt;restriction base="{http://www.w3.org/2001/XMLSchema}anyType">
 *       &lt;sequence>
 *         &lt;element name="SQLState" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *         &lt;element name="errorCode" type="{http://www.w3.org/2001/XMLSchema}int"/>
 *         &lt;element name="message" type="{http://www.w3.org/2001/XMLSchema}string" minOccurs="0"/>
 *         &lt;element name="nextException" type="{http://users/}sqlException" minOccurs="0"/>
 *       &lt;/sequence>
 *     &lt;/restriction>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "SQLException", propOrder = {
    "sqlState",
    "errorCode",
    "message",
    "nextException"
})
public class SQLException {

    @XmlElement(name = "SQLState")
    protected String sqlState;
    protected int errorCode;
    protected String message;
    protected SqlException nextException;

    /**
     * Obtient la valeur de la propriété sqlState.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getSQLState() {
        return sqlState;
    }

    /**
     * Définit la valeur de la propriété sqlState.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setSQLState(String value) {
        this.sqlState = value;
    }

    /**
     * Obtient la valeur de la propriété errorCode.
     * 
     */
    public int getErrorCode() {
        return errorCode;
    }

    /**
     * Définit la valeur de la propriété errorCode.
     * 
     */
    public void setErrorCode(int value) {
        this.errorCode = value;
    }

    /**
     * Obtient la valeur de la propriété message.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getMessage() {
        return message;
    }

    /**
     * Définit la valeur de la propriété message.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setMessage(String value) {
        this.message = value;
    }

    /**
     * Obtient la valeur de la propriété nextException.
     * 
     * @return
     *     possible object is
     *     {@link SqlException }
     *     
     */
    public SqlException getNextException() {
        return nextException;
    }

    /**
     * Définit la valeur de la propriété nextException.
     * 
     * @param value
     *     allowed object is
     *     {@link SqlException }
     *     
     */
    public void setNextException(SqlException value) {
        this.nextException = value;
    }

}
