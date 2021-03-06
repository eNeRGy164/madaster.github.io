/* 
 * Madaster Private API
 *
 * The Madaster Private API endpoint.
 *
 * OpenAPI spec version: 1.1
 * Contact: service@madaster.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using System.ComponentModel.DataAnnotations;
using SwaggerDateConverter = Madaster.API.Client.SwaggerDateConverter;

namespace Madaster.API.Model
{
    /// <summary>
    /// V11PortfolioFileResponse
    /// </summary>
    [DataContract]
    public partial class V11PortfolioFileResponse :  IEquatable<V11PortfolioFileResponse>, IValidatableObject
    {
        /// <summary>
        /// Defines Status
        /// </summary>
        public enum StatusEnum
        {
            
            /// <summary>
            /// Enum NUMBER_1 for value: 1
            /// </summary>
            
            NUMBER_1 = 1,
            
            /// <summary>
            /// Enum NUMBER_6 for value: 6
            /// </summary>
            
            NUMBER_6 = 6
        }

        /// <summary>
        /// Gets or Sets Status
        /// </summary>
        [DataMember(Name="status", EmitDefaultValue=false)]
        public StatusEnum? Status { get; set; }
        /// <summary>
        /// Defines Type
        /// </summary>
        public enum TypeEnum
        {
            
            /// <summary>
            /// Enum NUMBER_1 for value: 1
            /// </summary>
            
            NUMBER_1 = 1,
            
            /// <summary>
            /// Enum NUMBER_1000 for value: 1000
            /// </summary>
            
            NUMBER_1000 = 1000
        }

        /// <summary>
        /// Gets or Sets Type
        /// </summary>
        [DataMember(Name="type", EmitDefaultValue=false)]
        public TypeEnum? Type { get; set; }
        /// <summary>
        /// Initializes a new instance of the <see cref="V11PortfolioFileResponse" /> class.
        /// </summary>
        /// <param name="portfolioId">portfolioId.</param>
        /// <param name="fileName">fileName.</param>
        /// <param name="fileSize">fileSize.</param>
        /// <param name="status">status.</param>
        /// <param name="type">type.</param>
        /// <param name="lastModifiedDate">lastModifiedDate.</param>
        /// <param name="tags">tags.</param>
        /// <param name="id">id.</param>
        public V11PortfolioFileResponse(Guid? portfolioId = default(Guid?), string fileName = default(string), long? fileSize = default(long?), StatusEnum? status = default(StatusEnum?), TypeEnum? type = default(TypeEnum?), DateTime? lastModifiedDate = default(DateTime?), List<string> tags = default(List<string>), Guid? id = default(Guid?))
        {
            this.PortfolioId = portfolioId;
            this.FileName = fileName;
            this.FileSize = fileSize;
            this.Status = status;
            this.Type = type;
            this.LastModifiedDate = lastModifiedDate;
            this.Tags = tags;
            this.Id = id;
        }
        
        /// <summary>
        /// Gets or Sets PortfolioId
        /// </summary>
        [DataMember(Name="portfolioId", EmitDefaultValue=false)]
        public Guid? PortfolioId { get; set; }

        /// <summary>
        /// Gets or Sets FileName
        /// </summary>
        [DataMember(Name="fileName", EmitDefaultValue=false)]
        public string FileName { get; set; }

        /// <summary>
        /// Gets or Sets FileSize
        /// </summary>
        [DataMember(Name="fileSize", EmitDefaultValue=false)]
        public long? FileSize { get; set; }



        /// <summary>
        /// Gets or Sets LastModifiedDate
        /// </summary>
        [DataMember(Name="lastModifiedDate", EmitDefaultValue=false)]
        public DateTime? LastModifiedDate { get; set; }

        /// <summary>
        /// Gets or Sets Tags
        /// </summary>
        [DataMember(Name="tags", EmitDefaultValue=false)]
        public List<string> Tags { get; set; }

        /// <summary>
        /// Gets or Sets Id
        /// </summary>
        [DataMember(Name="id", EmitDefaultValue=false)]
        public Guid? Id { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class V11PortfolioFileResponse {\n");
            sb.Append("  PortfolioId: ").Append(PortfolioId).Append("\n");
            sb.Append("  FileName: ").Append(FileName).Append("\n");
            sb.Append("  FileSize: ").Append(FileSize).Append("\n");
            sb.Append("  Status: ").Append(Status).Append("\n");
            sb.Append("  Type: ").Append(Type).Append("\n");
            sb.Append("  LastModifiedDate: ").Append(LastModifiedDate).Append("\n");
            sb.Append("  Tags: ").Append(Tags).Append("\n");
            sb.Append("  Id: ").Append(Id).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }
  
        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public virtual string ToJson()
        {
            return JsonConvert.SerializeObject(this, Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return this.Equals(input as V11PortfolioFileResponse);
        }

        /// <summary>
        /// Returns true if V11PortfolioFileResponse instances are equal
        /// </summary>
        /// <param name="input">Instance of V11PortfolioFileResponse to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(V11PortfolioFileResponse input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.PortfolioId == input.PortfolioId ||
                    (this.PortfolioId != null &&
                    this.PortfolioId.Equals(input.PortfolioId))
                ) && 
                (
                    this.FileName == input.FileName ||
                    (this.FileName != null &&
                    this.FileName.Equals(input.FileName))
                ) && 
                (
                    this.FileSize == input.FileSize ||
                    (this.FileSize != null &&
                    this.FileSize.Equals(input.FileSize))
                ) && 
                (
                    this.Status == input.Status ||
                    (this.Status != null &&
                    this.Status.Equals(input.Status))
                ) && 
                (
                    this.Type == input.Type ||
                    (this.Type != null &&
                    this.Type.Equals(input.Type))
                ) && 
                (
                    this.LastModifiedDate == input.LastModifiedDate ||
                    (this.LastModifiedDate != null &&
                    this.LastModifiedDate.Equals(input.LastModifiedDate))
                ) && 
                (
                    this.Tags == input.Tags ||
                    this.Tags != null &&
                    this.Tags.SequenceEqual(input.Tags)
                ) && 
                (
                    this.Id == input.Id ||
                    (this.Id != null &&
                    this.Id.Equals(input.Id))
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                int hashCode = 41;
                if (this.PortfolioId != null)
                    hashCode = hashCode * 59 + this.PortfolioId.GetHashCode();
                if (this.FileName != null)
                    hashCode = hashCode * 59 + this.FileName.GetHashCode();
                if (this.FileSize != null)
                    hashCode = hashCode * 59 + this.FileSize.GetHashCode();
                if (this.Status != null)
                    hashCode = hashCode * 59 + this.Status.GetHashCode();
                if (this.Type != null)
                    hashCode = hashCode * 59 + this.Type.GetHashCode();
                if (this.LastModifiedDate != null)
                    hashCode = hashCode * 59 + this.LastModifiedDate.GetHashCode();
                if (this.Tags != null)
                    hashCode = hashCode * 59 + this.Tags.GetHashCode();
                if (this.Id != null)
                    hashCode = hashCode * 59 + this.Id.GetHashCode();
                return hashCode;
            }
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> IValidatableObject.Validate(ValidationContext validationContext)
        {
            yield break;
        }
    }

}
