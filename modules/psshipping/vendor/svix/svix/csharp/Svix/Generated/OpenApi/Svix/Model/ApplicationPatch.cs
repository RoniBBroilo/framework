/*
 * Svix API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.1.1
 * Generated by: https://github.com/openapitools/openapi-generator.git
 * 
 * Manually modified to add `EmitDefaultValue = false` in all properties. Null fields are ignored for PATCH requests.
 */


using System;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.IO;
using System.Runtime.Serialization;
using System.Text;
using System.Text.RegularExpressions;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using Newtonsoft.Json.Linq;
using System.ComponentModel.DataAnnotations;
using FileParameter = Svix.Client.FileParameter;
using OpenAPIDateConverter = Svix.Client.OpenAPIDateConverter;

namespace Svix.Model
{
    /// <summary>
    /// ApplicationPatch
    /// </summary>
    [DataContract(Name = "ApplicationPatch")]
    public partial class ApplicationPatch : IEquatable<ApplicationPatch>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="ApplicationPatch" /> class.
        /// </summary>
        /// <param name="metadata">metadata.</param>
        /// <param name="name">name.</param>
        /// <param name="rateLimit">rateLimit.</param>
        /// <param name="uid">The app&#39;s UID.</param>
        public ApplicationPatch(Dictionary<string, string> metadata = default(Dictionary<string, string>), string name = default(string), int? rateLimit = default(int?), string uid = default(string))
        {
            this.Metadata = metadata;
            this.Name = name;
            this.RateLimit = rateLimit;
            this.Uid = uid;
        }

        /// <summary>
        /// Gets or Sets Metadata
        /// </summary>
        [DataMember(Name = "metadata", EmitDefaultValue = false)]
        public Dictionary<string, string> Metadata { get; set; }

        /// <summary>
        /// Gets or Sets Name
        /// </summary>
        [DataMember(Name = "name", EmitDefaultValue = false)]
        public string Name { get; set; }

        /// <summary>
        /// Gets or Sets RateLimit
        /// </summary>
        [DataMember(Name = "rateLimit", EmitDefaultValue = false)]
        public int? RateLimit { get; set; }

        /// <summary>
        /// The app&#39;s UID
        /// </summary>
        /// <value>The app&#39;s UID</value>
        [DataMember(Name = "uid", EmitDefaultValue = false)]
        public string Uid { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class ApplicationPatch {\n");
            sb.Append("  Metadata: ").Append(Metadata).Append("\n");
            sb.Append("  Name: ").Append(Name).Append("\n");
            sb.Append("  RateLimit: ").Append(RateLimit).Append("\n");
            sb.Append("  Uid: ").Append(Uid).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }

        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public virtual string ToJson()
        {
            return Newtonsoft.Json.JsonConvert.SerializeObject(this, Newtonsoft.Json.Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return this.Equals(input as ApplicationPatch);
        }

        /// <summary>
        /// Returns true if ApplicationPatch instances are equal
        /// </summary>
        /// <param name="input">Instance of ApplicationPatch to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(ApplicationPatch input)
        {
            if (input == null)
                return false;

            return
                (
                    this.Metadata == input.Metadata ||
                    this.Metadata != null &&
                    input.Metadata != null &&
                    this.Metadata.SequenceEqual(input.Metadata)
                ) &&
                (
                    this.Name == input.Name ||
                    (this.Name != null &&
                    this.Name.Equals(input.Name))
                ) &&
                (
                    this.RateLimit == input.RateLimit ||
                    (this.RateLimit != null &&
                    this.RateLimit.Equals(input.RateLimit))
                ) &&
                (
                    this.Uid == input.Uid ||
                    (this.Uid != null &&
                    this.Uid.Equals(input.Uid))
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
                if (this.Metadata != null)
                    hashCode = hashCode * 59 + this.Metadata.GetHashCode();
                if (this.Name != null)
                    hashCode = hashCode * 59 + this.Name.GetHashCode();
                if (this.RateLimit != null)
                    hashCode = hashCode * 59 + this.RateLimit.GetHashCode();
                if (this.Uid != null)
                    hashCode = hashCode * 59 + this.Uid.GetHashCode();
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
            // RateLimit (int?) minimum
            if (this.RateLimit < (int?)0)
            {
                yield return new System.ComponentModel.DataAnnotations.ValidationResult("Invalid value for RateLimit, must be a value greater than or equal to 0.", new[] { "RateLimit" });
            }

            // Uid (string) maxLength
            if (this.Uid != null && this.Uid.Length > 256)
            {
                yield return new System.ComponentModel.DataAnnotations.ValidationResult("Invalid value for Uid, length must be less than 256.", new[] { "Uid" });
            }

            // Uid (string) minLength
            if (this.Uid != null && this.Uid.Length < 1)
            {
                yield return new System.ComponentModel.DataAnnotations.ValidationResult("Invalid value for Uid, length must be greater than 1.", new[] { "Uid" });
            }

            // Uid (string) pattern
            Regex regexUid = new Regex(@"^[a-zA-Z0-9\\-_.]+$", RegexOptions.CultureInvariant);
            if (false == regexUid.Match(this.Uid).Success)
            {
                yield return new System.ComponentModel.DataAnnotations.ValidationResult("Invalid value for Uid, must match a pattern of " + regexUid, new[] { "Uid" });
            }

            yield break;
        }
    }

}
